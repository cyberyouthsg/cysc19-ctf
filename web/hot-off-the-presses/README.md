# Hot Off The Presses

You've heard that the Silicon Valley giant Business Factory Inc is about to make an announcement that could shake up the stock market and decide that you want in on some insider trading action. Business Factory has a website where they post their press releases, and they have the habit of putting announcements up in advance and merely toggling the visibility to public when the release is scheduled to go out. Can you get access to their latest press release before everyone else does and make some $$$?

### Hints
1. There's no admin panel to attack here; the attack is on view.php itself.
2. No specialised trickery needed here; some quick maths is all you need.
3. Do you see a pattern in the URLs for press releases?

## Deployment

```
cd website
./build.sh
# edit the PORT variable in run.sh to change port the webserver runs on
./run.sh
# http://localhost:8080 (or whatever port is in run.sh) will serve the challenge
```

## Solution

The attack here is a classic [Insecure Direct Object Reference](https://www.owasp.org/index.php/Testing_for_Insecure_Direct_Object_References_(OTG-AUTHZ-004)). In this case, view.php does no checks to verify whether the public is allowed to access a specified press release, so even if a "hidden" press release isn't linked to from index.php, it can be accessed by guessing the "id" parameter. To solve the challenge, go to http://host/view.php?id=5 and retrieve the flag `CYS{i+s_Just_arithmetic}`
