<?php
require_once 'Zend/Loader.php'; // the Zend dir must be in your include_path
Zend_Loader::loadClass('Zend_Gdata_YouTube');
$yt = new Zend_Gdata_YouTube();

Zend_Loader::loadClass('Zend_Gdata_AuthSub');
Zend_Loader::loadClass('Zend_Gdata_ClientLogin'); 

// Salt Generator
function generate_salt ()
{ 
    	// Declare $salt
     $salt = '';
     // And create it with random chars
     for ($i = 0; $i < 3; $i++)
     { 
          $salt .= chr(rand(35, 126)); 
     } 
          return $salt;
}

function sub($channel)
{
	$username = $_SESSION['username'];
	$query = "select token from user where username='$username' limit 1";
     $result = mysql_query($query);
	$row = mysql_fetch_array( $result );
     $token = $row['token'];

	$httpClient = Zend_Gdata_AuthSub::getHttpClient($token);

	$developerKey = 'AI39si5uCFW5FETweIaPnbNJUP88YvpOtSoy7FSUnYnTFVH4liFKzqWTkndATtgiltByN54tPcVjsScyh3S28P-D4PC4n73alg';

	$applicationId = 'EazySubs';
	$clientId = 'EazySubs';
	$yt = new Zend_Gdata_YouTube($httpClient, $applicationId, 	$clientId, $developerKey);

	// this example assumes that $yt is a fully authenticated service object
	$subscriptionsFeedUrl = "http://gdata.youtube.com/feeds/api/users/default/subscriptions";
$newSubscription = $yt->newSubscriptionEntry();

	$newSubscription->setUsername(new Zend_Gdata_YouTube_Extension_Username($channel));

	// post
	try{
	$yt->insertEntry($newSubscription, $subscriptionsFeedUrl);
    return true;
	}
	catch(Exception $e){return false;}
}

function friend($channel)
{
	$username = $_SESSION['username'];
	$query = "select token from user where username='$username'";
     $result = mysql_query($query);
	$row = mysql_fetch_array( $result );
     $token = $row['token'];

	$httpClient = Zend_Gdata_AuthSub::getHttpClient($token);

	$developerKey = 'AI39si5uCFW5FETweIaPnbNJUP88YvpOtSoy7FSUnYnTFVH4liFKzqWTkndATtgiltByN54tPcVjsScyh3S28P-D4PC4n73alg';

	$applicationId = 'EazySubs';
	$clientId = 'EazySubs';
	$yt = new Zend_Gdata_YouTube($httpClient, $applicationId, 	$clientId, $developerKey);
    
    $contactFeedUrl = 'http://gdata.youtube.com/feeds/api/users/default/contacts';
	$newContact = $yt->newContactEntry();
$newContact->username = $yt->newUsername($channel);
$newContact->category = 
  array($yt->newCategory('Friends',
                            'http://gdata.youtube.com/schemas/2007/contact.cat'));

	// post
	try{
	$yt->insertEntry($newContact, $contactFeedUrl);
    return true;
	}
	catch(Exception $e){return false;}
}

function user_register($username, $password, $email, $youtubeUserName)
{
    // Get a salt using our function
    $salt = generate_salt();
    // Now encrypt the password using that salt
    $encrypted = md5(md5($password).$salt);
    // And lastly, store the information in the database
    $ref = $_SESSION['ref'];
    $query = "insert into user (username, password, salt, email, youtubeUserName, video, refferal) values ('$username', '$encrypted', '$salt', '$email', '$youtubeUserName', '', '$ref')";
    mysql_query ($query) or die ('Could not create user. Refresh the page to try again.');
}

function user_login($username, $password)
{

	$query = "select email, youtubeUserName, userid, salt from user where username='$username' limit 1";
     $result = mysql_query($query);
	$row = mysql_fetch_array( $result );
     $email = $row['email'];
     $youtubeUserName = $row['youtubeUserName'];
	$userid = $row['userid'];

     // Using the salt, encrypt the given password to see if it 
     // matches the one in the database
     $encrypted_pass = md5(md5($password).$row['salt']);

     // Try and get the user using the username & encrypted pass
     $query = "select userid, username from user where username='$username' and password='$encrypted_pass'";
     $result = mysql_query($query);
     $user = mysql_fetch_array($result);
     $numrows = mysql_num_rows($result);
     // Now encrypt the data to be stored in the session
     $encrypted_id = md5($user['userid']);
	$username2 = strtolower ($user['username']);
     $encrypted_name = md5($username2);
     // Store the data in the session
     $_SESSION['userid'] = $userid;
     $_SESSION['username'] = $username;
     $_SESSION['encrypted_id'] = $encrypted_id;
     $_SESSION['encrypted_name'] = $encrypted_name;
     $_SESSION['email'] = $email;
     $_SESSION['youtubeUserName'] = $youtubeUserName;
    if ($numrows == 1)
    {
        return 'Correct';
    }
    else
    {
        return false;
    }
}


function user_update($email, $password, $youtube, $category, $username)
{
?>
<?php
$query = "select salt from user where username='$username' limit 1";
     $result = mysql_query($query);
     $user = mysql_fetch_array($result);

     // Using the salt, encrypt the given password to see if it 
     // matches the one in the database
     $encrypted_pass = md5(md5($password).$user['salt']);

if($password != '')
{
$query = "update user set email = '$email', password = '$encrypted_pass', youtubeUserName = '$youtube', category = '$category'  where username='$username'";
    $result = mysql_query ($query);
if (!$result) {
return false;
}
else{
return 'Correct';
}
}

if($password == '')
{
$query = "update user set email = '$email', youtubeUserName = '$youtube', category = '$category'  where username='$username'";
    $result = mysql_query ($query);
if (!$result) {
return false;
}
else{
return 'Correct';
}
}
return false;
}

function user_logout()
{
     // End the session and unset all vars
     session_unset ();
     session_destroy ();
}
function is_authed()
{
	if (isset($_SESSION['username'])){
	$username = strtolower($_SESSION['username']);
	}
     // Check if the encrypted username is the same
     // as the unencrypted one, if it is, it hasn't been changed
     if (isset($_SESSION['username']) && (md5($username) == $_SESSION['encrypted_name']))
     {
          return true;
     }
     else
     {
          return false;
     }
}

date_default_timezone_set("EST");



function dateDiff($time1, $time2, $precision = 6) {
    // If not numeric then convert texts to unix timestamps
    if (!is_int($time1)) {
      $time1 = strtotime($time1);
    }
    if (!is_int($time2)) {
      $time2 = strtotime($time2);
    }
 
    // If time1 is bigger than time2
    // Then swap time1 and time2
    if ($time1 > $time2) {
      $ttime = $time1;
      $time1 = $time2;
      $time2 = $ttime;
    }
 
    // Set up intervals and diffs arrays
    $intervals = array('year','month','day','hour','minute','second');
    $diffs = array();
 
    // Loop thru all intervals
    foreach ($intervals as $interval) {
      // Set default diff to 0
      $diffs[$interval] = 0;
      // Create temp time from time1 and interval
      $ttime = strtotime("+1 " . $interval, $time1);
      // Loop until temp time is smaller than time2
      while ($time2 >= $ttime) {
	$time1 = $ttime;
	$diffs[$interval]++;
	// Create new temp time from time1 and interval
	$ttime = strtotime("+1 " . $interval, $time1);
      }
    }
 
    $count = 0;
    $times = array();
    // Loop thru all diffs
    foreach ($diffs as $interval => $value) {
      // Break if we have needed precission
      if ($count >= $precision) {
	break;
      }
      // Add value and interval 
      // if value is bigger than 0
      if ($value > 0) {
	// Add s if value is not 1
	if ($value != 1) {
	  $interval .= "s";
	}
	// Add value and interval to times array
	$times[] = $value . " " . $interval;
	$count++;
      }
    }
$count = 0;
    foreach ($diffs as $interval) { 
if($count == 0 or $count == 1 or $count == 2)
{
if($interval > 0)
{
return 'true';
}
} 

if($count == 3)
{
if($interval > 0)
{
return 'true';
}
} 
$count++;
}
}


function dateDiff2($time1, $time2, $precision = 6) {
    // If not numeric then convert texts to unix timestamps
    if (!is_int($time1)) {
      $time1 = strtotime($time1);
    }
    if (!is_int($time2)) {
      $time2 = strtotime($time2);
    }
 
    // If time1 is bigger than time2
    // Then swap time1 and time2
    if ($time1 > $time2) {
      $ttime = $time1;
      $time1 = $time2;
      $time2 = $ttime;
    }
 
    // Set up intervals and diffs arrays
    $intervals = array('year','month','day','hour','minute','second');
    $diffs = array();
 
    // Loop thru all intervals
    foreach ($intervals as $interval) {
      // Set default diff to 0
      $diffs[$interval] = 0;
      // Create temp time from time1 and interval
      $ttime = strtotime("+1 " . $interval, $time1);
      // Loop until temp time is smaller than time2
      while ($time2 >= $ttime) {
	$time1 = $ttime;
	$diffs[$interval]++;
	// Create new temp time from time1 and interval
	$ttime = strtotime("+1 " . $interval, $time1);
      }
    }
 
    $count = 0;
    $times = array();
    // Loop thru all diffs
    foreach ($diffs as $interval => $value) {
      // Break if we have needed precission
      if ($count >= $precision) {
	break;
      }
      // Add value and interval 
      // if value is bigger than 0
      if ($value > 0) {
	// Add s if value is not 1
	if ($value != 1) {
	  $interval .= "s";
	}
	// Add value and interval to times array
	$times[] = $value . " " . $interval;
	$count++;
      }
    }
    //return implode(", ", $times);
 $count = 0;
    foreach ($diffs as $interval) { 
if($count == 0 or $count == 1)
{
if($interval > 0)
{
return 'true';
}
} 

if($count == 2)
{
if($interval > 29)
{
return 'true';
}
} 
$count++;
}
return 'false';
    // Return string with times
  }

function dateDiff3($time1, $time2, $daysNeeded, $precision = 6) {
$daysNeeded--;
    // If not numeric then convert texts to unix timestamps
    if (!is_int($time1)) {
      $time1 = strtotime($time1);
    }
    if (!is_int($time2)) {
      $time2 = strtotime($time2);
    }
 
    // If time1 is bigger than time2
    // Then swap time1 and time2
    if ($time1 > $time2) {
      $ttime = $time1;
      $time1 = $time2;
      $time2 = $ttime;
    }
 
    // Set up intervals and diffs arrays
    $intervals = array('year','month','day','hour','minute','second');
    $diffs = array();
 
    // Loop thru all intervalsr
    foreach ($intervals as $interval) {
      // Set default diff to 0
      $diffs[$interval] = 0;
      // Create temp time from time1 and interval
      $ttime = strtotime("+1 " . $interval, $time1);
      // Loop until temp time is smaller than time2
      while ($time2 >= $ttime) {
	$time1 = $ttime;
	$diffs[$interval]++;
	// Create new temp time from time1 and interval
	$ttime = strtotime("+1 " . $interval, $time1);
      }
    }
 
    $count = 0;
    $times = array();
    // Loop thru all diffs
    foreach ($diffs as $interval => $value) {
      // Break if we have needed precission
      if ($count >= $precision) {
	break;
      }
      // Add value and interval 
      // if value is bigger than 0
      if ($value > 0) {
	// Add s if value is not 1
	if ($value != 1) {
	  $interval .= "s";
	}
	// Add value and interval to times array
	$times[] = $value . " " . $interval;
	$count++;
      }
    }
    //return implode(", ", $times);
 $count = 0;
    foreach ($diffs as $interval) { 
if($count == 0 or $count == 1)
{
if($interval > 0)
{
return 'true';
}
} 

if($count == 2)
{
if($interval > $daysNeeded)
{
return 'true';
}
} 
$count++;
}
return 'false';
    // Return string with times
  }
  
function getFirstVideo($userName)                    
{     
try{
  $yt = new Zend_Gdata_YouTube();
  $yt->setMajorProtocolVersion(2);
  $videoFeed = $yt->getuserUploads($userName);
  foreach ($videoFeed as $videoEntry) {
    return $videoEntry->getVideoId();
  }
}
catch(exception $e){}
}  

function getAndPrintUserUploads($userName)                    
{  
$username = $_SESSION['username'];
$query = "select video from user where username='$username'";
     $result = mysql_query($query);
	$row = mysql_fetch_array( $result );
     $video = $row['video'];
?>
<option value="" <? if($video=='') echo 'selected="selected"';?>>
None
</option>
<?php
  $yt = new Zend_Gdata_YouTube();
  $yt->setMajorProtocolVersion(2);
  printVideoFeed($yt->getuserUploads($userName));
}  

function printVideoFeed($videoFeed)
{
  $count = 1;
  foreach ($videoFeed as $videoEntry) {
    printVideoEntry($videoEntry);
    $count++;
  }
}

function printVideoEntry($videoEntry) 
{
$username = $_SESSION['username'];
$query = "select video from user where username='$username'";
     $result = mysql_query($query);
	$row = mysql_fetch_array( $result );
     $video = $row['video'];
?>
<option value="<?php echo $videoEntry->getVideoId(); ?>" <? if($video==$videoEntry->getVideoId()) echo 'selected="selected"';?>>
<?php echo $videoEntry->getVideoTitle(); ?>
</option>
<?php
//  echo 'Video: ' . $videoEntry->getVideoTitle() . "<br>";
//  echo 'Video ID: ' . $videoEntry->getVideoId() . "<br><br>";
//  echo "<br><br>";
}

function like($entry)
{
$username = $_SESSION['username'];
	$query = "select token from user where username='$username'";
     $result = mysql_query($query);
	$row = mysql_fetch_array( $result );
     $token = $row['token'];


$httpClient = Zend_Gdata_AuthSub::getHttpClient($token);

	$developerKey = 'AI39si5uCFW5FETweIaPnbNJUP88YvpOtSoy7FSUnYnTFVH4liFKzqWTkndATtgiltByN54tPcVjsScyh3S28P-D4PC4n73alg';

	$applicationId = 'EazySubs';
	$clientId = 'EazySubs';
	$yt = new Zend_Gdata_YouTube($httpClient, $applicationId, 	$clientId, $developerKey);


$videoEntryToRate = $yt->getVideoEntry($entry);
$videoEntryToRate->setVideoRating(5);
$ratingUrl = $videoEntryToRate->getVideoRatingsLink()->getHref();
try {
  $ratedVideoEntry = $yt->insertEntry( $videoEntryToRate, $ratingUrl, 
    'Zend_Gdata_YouTube_VideoEntry');
echo 'success';
return true;
} catch (Zend_Gdata_App_HttpException $httpException) {
  return false;
  echo $httpException->getRawResponseBody();
}
}

function comment($entry, $comment)
{
$username = $_SESSION['username'];
	$query = "select token from user where username='$username'";
     $result = mysql_query($query);
	$row = mysql_fetch_array( $result );
     $token = $row['token'];

$httpClient = Zend_Gdata_AuthSub::getHttpClient($token);

	$developerKey = 'AI39si5uCFW5FETweIaPnbNJUP88YvpOtSoy7FSUnYnTFVH4liFKzqWTkndATtgiltByN54tPcVjsScyh3S28P-D4PC4n73alg';

	$applicationId = 'EazySubs';
	$clientId = 'EazySubs';
	$yt = new Zend_Gdata_YouTube($httpClient, $applicationId, 	$clientId, $developerKey);

try {
$videoEntry = $yt->getVideoEntry($entry);
$newComment = $yt->newCommentEntry();
$newComment->content = $yt->newContent()->setText($comment);

// post the comment to the comments feed URL for the video
$commentFeedPostUrl = $videoEntry->getVideoCommentFeedUrl();
$updatedVideoEntry = $yt->insertEntry($newComment, $commentFeedPostUrl,
  'Zend_Gdata_YouTube_CommentEntry');
  return true;
}
catch(Exception $e) {return false;}
}

?>