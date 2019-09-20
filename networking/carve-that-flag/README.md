# Carve That Flag

------

In this packet capture, an image file containing the flag was downloaded. Recover the image file and view the image, and the flag is yours.

## Deployment

------

All that is needed is to allow the participants to download the packet capture file `download.pcapng`

## Solution

1. Following the 2nd TCP stream in Wireshark which contains the TCP traffic during the download of the image file from the website, the string indicating the start of a JPG file, `JFIF` can be seen.

   ![img](https://lh5.googleusercontent.com/5845J673TMmg69cPkF1W2iyGALHjILvQ6-mbaeA6BjN5dnF8eASAWgYXXygzHIam1PYoLEz4uFW6eRaaBkeCnCp5Tm9MUSfyF8OYDlQRKc13r9PdQounNYGqOs9y7oew4QS2ZPIs)

2. Isolate the traffic in the stream to only show traffic from the website (192.168.15.6) to the user (192.168.15.4). The data should be shown in **RAW** format and not **ASCII**. 

   ![img](https://lh5.googleusercontent.com/Fw-v8AcO4Zd861tOL-ePq5LIza6mLfau_yX_UgkY23rpSKkZtCnC7NIy3oq2Yb-dhOKsw1zxKOtADiZiuTszRMQRT2QnHxmap0HYSPSyuYMw8DyZnoz34cvqVSLF1PD9U3lmP9Jd)

3. Save the raw data to a file with the .jpg extension.

4. Open the saved file in a hex editor (e.g. HxD).

5. Select all the extra data before bytes FF D8 FF E0, which signify the start of a new JPG file, and delete.

   ![img](https://lh6.googleusercontent.com/ITdezzrQZqzQzGBxVGi0BlRPgsytTsZ1EmwrLH4fR1jUsBQKvgLTZ3v_gkShuPzfUAktdV4C__FE2r4YIfOBRPdT0Hklfm93Wtcz5L6hMIGNebDZ_j1TJhQWdGXeU5IheynRfY7J)

6. Save the changes made to the file. The image file has been successfully carved from the packet capture and can be viewed, which reveals the flag to be `CYS{1_c4rv3d_th3_1m4g3}`.

Alternatively, in Wireshark navigate to File -> Export Objects -> HTTP... and save the image file flag.jpg.