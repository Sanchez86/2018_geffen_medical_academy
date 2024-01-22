<?php
//date_default_timezone_set("Europe/Kiev");
/*
$boss_mail="office@dmc.org.il";
$admine_mail="Ilana.Reznikov@dmc.org.il";
*/

$user_mail = htmlspecialchars($_POST["remail2"]);
$admine_mail="Lital.levi@geffenmedical.com, irina@geffenmedical.com, Shira.marton@geffenmedical.com"; 

$date=date("d.m.y");
$time=date("H:i");

$headers = "From: GeffenMedical.co.il";

$first_name=htmlspecialchars($_POST["first-name"]);
$special=htmlspecialchars($_POST["last-name"]);
$phone=htmlspecialchars($_POST["field1"]);
$work=htmlspecialchars($_POST["field2"]);
$remail1=htmlspecialchars($_POST["remail1"]);
$remail2=htmlspecialchars($_POST["remail2"]);

$date_select=htmlspecialchars($_POST["select_date"]);

$textNew=htmlspecialchars($_POST["textNew"]);

$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

$msg_user = '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <meta http-equiv="Content-Type" content="text/html; />
  <title>Email</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
	<body>
		<table style="text-align:right; font-size:16px; width:100%" >
		    <tr>
                <td style="text-align: right;font-size: 20px;unicode-bidi: normal;direction: rtl;">
                    תודה על הרשמתך ל- ABBOTT DIABETES ACADEMY 
                </td>
            </tr>
            <tr>
                <td style="text-align:right">
                    הרשמתך נקלטה במערכת 
                </td>
            </tr>
            <tr>
                <td style="text-align:right;unicode-bidi: normal;direction: rtl; padding: 10px 0px 2px;">
                    פרטי ההרשמה: 
                </td>
            </tr>
			<tr>
				<td style="text-align:right;unicode-bidi: normal;direction: rtl;">
					 שם מלא: '.$first_name.'
				</td>
			</tr>
			<tr>
				<td style="text-align:right;unicode-bidi: normal;direction: rtl;">
					 תואר: '.$special .'
				</td>
			</tr>
			<tr>
				<td style="text-align:right;unicode-bidi: normal;direction: rtl;">
					תחום התמחות: '.$phone.'
				</td>
			</tr>
			<tr>
				<td style="text-align:right;unicode-bidi: normal;direction: rtl;">
					מקום עבודה: '.$work.'
				</td>
			</tr>
			<tr>
				<td style="text-align:right;unicode-bidi: normal;direction: rtl;">
					טלפון: '.$remail1.'
				</td>
			</tr>
			<tr>
				<td style="text-align:right;unicode-bidi: normal;direction: rtl;">
					כתובת אי מייל: '.$remail2.'
				</td>
			</tr>
			<tr>
				<td style="text-align:right;unicode-bidi: normal;direction: rtl;">
					תאריך הקורס: '.$date_select.'
				</td>
			</tr>
			<tr>
				<td style="text-align:right;unicode-bidi: normal;direction: rtl;">
					תגובה: '.$textNew.'
				</td>
			</tr>
			<tr>
                <td style="text-align:right">
                    במידה ולא תוכל/י להגיע לקורס בתאריך שנבחר התקשרו 03-6900333
                </td>
            </tr>
            <tr>
                <td style="text-align:right;unicode-bidi: normal;direction: rtl;">
                    נתראה בקורס,
                </td>
            </tr>
            <tr>
                <td style="text-align:right;unicode-bidi: normal;direction: rtl;">
                    צוות ABOOTT DIABETES ACADEMY
                </td>
            </tr>
		</table>
	</body>
</html>
';

$msg = '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <meta http-equiv="Content-Type" content="text/html; />
  <title>Email</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
	<body>
		<table style="text-align:right; font-size:16px; width:100%">
		<tr>
		<td style="text-align:right;unicode-bidi: normal;direction: rtl;">
			 שם מלא: '.$first_name.'
		</td>
	</tr>
	<tr>
		<td style="text-align:right;unicode-bidi: normal;direction: rtl;">
			 תואר: '.$special .'
		</td>
	</tr>
	<tr>
		<td style="text-align:right;unicode-bidi: normal;direction: rtl;">
			תחום התמחות: '.$phone.'
		</td>
	</tr>
	<tr>
		<td style="text-align:right;unicode-bidi: normal;direction: rtl;">
			מקום עבודה: '.$work.'
		</td>
	</tr>
	<tr>
		<td style="text-align:right;unicode-bidi: normal;direction: rtl;">
			טלפון: '.$remail1.'
		</td>
	</tr>
	<tr>
		<td style="text-align:right;unicode-bidi: normal;direction: rtl;">
			כתובת אי מייל: '.$remail2.'
		</td>
	</tr>
	<tr>
		<td style="text-align:right;unicode-bidi: normal;direction: rtl;">
			תאריך הקורס: '.$date_select.'
		</td>
	</tr>

			<tr>
				<td style="text-align:right;unicode-bidi: normal;direction: rtl;">
					תגובה: '.$textNew.'
				</td>
			</tr>
		</table>
	</body>
</html>
';

mail($admine_mail, " רישום לקורס רופאים ", $msg, $headers);
mail($user_mail, "ABBOTT DIABETES ACADEMY - רישום ל", $msg_user, $headers);

header('Location: ' . $_SERVER['HTTP_REFERER']);

?>