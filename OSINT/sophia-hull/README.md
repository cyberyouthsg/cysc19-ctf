# Sophia Hull

Good evening agent, we need you (again) to investigate a target. Specifically, we need information about the postal
 code and phone number of a building the target have visited.   

We have exfiltrated a few images from the target's phone. The images will help you triangulate the location of the
 building. Fitness tracking data showed the target walking for about 5 mins after alighting a bus.    
  
Additionally we found have found the transit card records;  
| Timestamp UTC +8    | Desc.|  
| ------------------- | ---- |  
| 2019-12-12-11:1?:?? | ???? |    
| 2019-12-12-11:20:46 | Boarded bus 61 at 14169 |  
| 2019-12-12-11:56:?? | Alighted bus 61 at ???? | 

(The flag is the phone number (for enquiries) and postal code, submit it as CYS{_phone_number_,_poastal_code_} ) 
e.g. CYS{60000000,111111} 

The pictures tell a story, use your imagination and figure out where they are going.  
    
### Hints  
1. Who is Sophia Hull, and why does that involve read only memory?

### Deployment

Share the photos.zip
  
## Solution
  
Find out the location of the building from the photos and find the mid way point which will be near ROM.  
Sophia Hull is actually the wife of Raffles, this have something to do with marriage hence ROM. One of the photos contain location data placing them near ROM. 

Flag is `CYS{63387808,179869}`
