# Whole Lotta Spam

My friend complained to me that when he searches for his fanpage on Google, some weird spam shows up as the result text beside his page, but when I go to his site nothing seems amiss. Is Google seeing something different than I am?!

The website is at [LINK]

### Hints
Maybe Google sends something when crawling the page that causes the website to behave differently... 

## Deployment

```
cd website
./build.sh
# edit the PORT variable in run.sh to change port the webserver runs on
./run.sh
# http://localhost:8080 (or whatever port is in run.sh) will serve the challenge
```

## Solution

When Google crawls websites, it sets its [User Agent](https://en.wikipedia.org/wiki/User_agent) to include the string ["Googlebot"](https://support.google.com/webmasters/answer/182072?hl=en). If a website has code to detect this user agent, it can make Google see the site differently from a regular user.
To solve this challenge, [change your user agent](https://www.howtogeek.com/113439/how-to-change-your-browsers-user-agent-without-installing-any-extensions/) to include the string "Googlebot". The resulting extra text that shows up should include the flag, `CYS{im_in_ur_php_poisoning_ur_seo}`
