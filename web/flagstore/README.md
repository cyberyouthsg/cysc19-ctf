# Flag Store

Did you know that there is a store around here that sells flag?

## Deployment

Run `sudo ./build.sh` in the `service` directory.


## Solution

1. Get the login credentials `guest:securepwd` in the comments found at `login.php` by viewing the page source.
2. When user clicks on any of the fake entries, they will be redirected to `purchase.php`.
3. In `purchase.php`,  there is a comment hinting what parameter needs to be sent.
4. Users can modify the URL parameter directly. i.e. `user=admin&item=hidden_real_flag`

Upon changing the parameters, you will get the flag `CYS{f1ag_570r3_b357_570r3}`.
