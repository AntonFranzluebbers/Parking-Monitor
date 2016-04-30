#  This file is part of Parking Monitor.

#    Parking Monitor is free software: you can redistribute it and/or modify
#    it under the terms of the GNU General Public License as published by
#    the Free Software Foundation, either version 3 of the License, or
#    (at your option) any later version.

#    Parking Monitor is distributed in the hope that it will be useful,
#    but WITHOUT ANY WARRANTY; without even the implied warranty of
#    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#    GNU General Public License for more details.

#    You should have received a copy of the GNU General Public License
#    along with Parking Monitor.  If not, see <http://www.gnu.org/licenses/>.

import RPi.GPIO as GPIO 		#import GPIO library
import time						#import time library
import requests

GPIO.setwarnings(False)			#suppresses GPIO warning
GPIO.setmode(GPIO.BCM)			#set GPIO pin numbering
TRIG = 23						#associate pin 23 to TRIG
ECHO = 24						#associate pin 24 to ECHO
GPIO.setup(TRIG,GPIO.OUT)
GPIO.setup(ECHO,GPIO.IN)


url = "http://antonfranzluebbers.me/add_data.php"

def readUltraSonic():
	counter = 1
	data=[]

	while (counter<11):
		GPIO.output(TRIG, False)
		time.sleep(.5)
		GPIO.output(TRIG, True)
		time.sleep(0.00001)
		GPIO.output(TRIG, False)

		while GPIO.input(ECHO)==0:
			pulse_start = time.time()

		while GPIO.input(ECHO)==1:
			pulse_end = time.time()

		pulse_duration = pulse_end - pulse_start
		distance = pulse_duration*17150
		distance = round(distance,2)
		data.append(distance) #adds to the list
		counter+=1

	data.sort() #sorts the list
	data = data[1:-1] #gets rid of the biggest and smallest number so it won't count any extremes
	average = sum(data)/float(len(data)) #finds the average
	average = round(average,2)

	print(average)
	return average;	
	
def sendPHP(distance):
	payload = {"serial":"HC-SR04-1","distance":distance}
	r1 = requests.get(url,params=payload)
	

while True:
	distance = readUltraSonic()
	sendPHP(distance)
	time.sleep(1)





