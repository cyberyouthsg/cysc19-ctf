# imports
import winreg
import psutil
from uuid import getnode
from shutil import disk_usage
from sys import exit

def detect_vmware():
	flag = False
	keys = ["SOFTWARE\\VMware, Inc.\\VMware Tools",\
	"SYSTEM\\CurrentControlSet\\Enum\\SCSI\\Disk&Ven_VMware_&Prod_VMware_Virtual_S"]
	for k in keys:
		try:
			winreg.OpenKey(winreg.HKEY_LOCAL_MACHINE,k,0,winreg.KEY_READ)
			flag = True
		except:
			pass
	if not flag:
		processes = [p.name() for p in psutil.process_iter()]
		blacklist = ["vmtoolsd.exe","vmwaretrat.exe","vmwareuser.exe","vmacthlp.exe"]
		for b in blacklist:
			if b in processes:
				flag = True
				break
	return flag

def detect_vbox():
	flag = False
	blacklist = "080027"
	if str(hex(getnode())[:6]) == blacklist:
		flag = True
	if not flag:
		processes = [p.name() for p in psutil.process_iter()]
		blacklist = ["vboxservice.exe","vboxtray.exe"]
		for b in blacklist:
			if b in processes:
				flag = True
				break
	return flag

def detect_host():
	flag = False
	total, used, free = disk_usage("C:\\")
	total = total // (2**30)
	if total > 100:
		flag = True
	return flag

def detect_wine():
	flag = False
	key = "Software\\Wine"
	try:
		winreg.OpenKey(winreg.HKEY_LOCAL_MACHINE,key,0,winreg.KEY_READ)
		flag = True
	except:
		processes = [p.name() for p in psutil.process_iter()]
		blacklist = "winedevice.exe"
		if blacklist in processes:
			flag = True
	return flag

def win():
	print("CYS{n0w_U_Kn0W_4nt1_4Naly5is_mAlw4R3}")

def main():
	if detect_vbox() or detect_vmware():
		print("Nice try. You are in a VM.")	
		sys.exit()
	elif detect_wine():
		print("Not a fan of Wine, I'm more of a Vodka man")
		sys.exit()
	elif detect_host():
		print("You are running malware on a host machine? You are lucky I'm not a destructive malware")
		sys.exit()
	else:
		win()
if __name__ == "__main__":
	main()