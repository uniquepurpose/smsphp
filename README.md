# smsphp
Simple PHP script which sends sms through gammu.

gammu is configured to use an ZTE MF112 USB-GSM dongle to send text messages.

## Requirements:
- run gammu-config (a working config is in this repo)
- copy ~/.gammurc to your webserver/www-data homedir (cp .gammurc /var/www/)
- add your webserver/www-data to dialout group. (ie dialout:x:20:www-data)
- create an sms.log file and allow your webserver/www-data to write to this file (touch /var/www/html/sms.log && chown www-data /var/www/html/sms.log)

## Usage
- Single recipient:
URL: http://localhost/sms.php?rec=06641234567&text=Sample UTF8 text with spaces and all that!
- Multiple recipients:
URL: http://localhost/sms.php?rec=06641234567;06991234567;06761234567&text=Sample UTF8 text with spaces and all that!
