import json

f=open("checklist.json")
a=f.read()
b=json.loads(a)
for i in b["categories"]:
    for j in b["categories"][i]["tests"]:
        print(j["id"])
    
# d=["WSTG-INFO-01","WSTG-INFO-02","WSTG-INFO-03","WSTG-INFO-04","WSTG-INFO-05","WSTG-INFO-06","WSTG-INFO-07","WSTG-INFO-08","WSTG-INFO-09","WSTG-INFO-10","WSTG-CONF-01","WSTG-CONF-02","WSTG-CONF-03","WSTG-CONF-04","WSTG-CONF-05","WSTG-CONF-06","WSTG-CONF-07","WSTG-CONF-08","WSTG-CONF-09","WSTG-CONF-10","WSTG-CONF-11","WSTG-IDNT-01","WSTG-IDNT-02","WSTG-IDNT-03","WSTG-IDNT-04","WSTG-IDNT-05","WSTG-ATHN-01","WSTG-ATHN-02","WSTG-ATHN-03","WSTG-ATHN-04","WSTG-ATHN-05","WSTG-ATHN-06","WSTG-ATHN-07","WSTG-ATHN-08","WSTG-ATHN-09","WSTG-ATHN-10","WSTG-ATHZ-01","WSTG-ATHZ-02","WSTG-ATHZ-03","WSTG-ATHZ-04","WSTG-SESS-01","WSTG-SESS-02","WSTG-SESS-03","WSTG-SESS-04","WSTG-SESS-05","WSTG-SESS-06","WSTG-SESS-07","WSTG-SESS-08","WSTG-SESS-09","WSTG-INPV-01","WSTG-INPV-02","WSTG-INPV-03","WSTG-INPV-04","WSTG-INPV-05","WSTG-INPV-06","WSTG-INPV-07","WSTG-INPV-08","WSTG-INPV-09","WSTG-INPV-10","WSTG-INPV-11","WSTG-INPV-12","WSTG-INPV-13","WSTG-INPV-13","WSTG-INPV-14","WSTG-INPV-15","WSTG-INPV-16","WSTG-INPV-17","WSTG-INPV-18","WSTG-INPV-19","WSTG-ERRH-01","WSTG-ERRH-02","WSTG-CRYP-01","WSTG-CRYP-02","WSTG-CRYP-03","WSTG-CRYP-04","WSTG-BUSL-01","WSTG-BUSL-02","WSTG-BUSL-03","WSTG-BUSL-04","WSTG-BUSL-05","WSTG-BUSL-06","WSTG-BUSL-07","WSTG-BUSL-08","WSTG-BUSL-09","WSTG-CLNT-01","WSTG-CLNT-02","WSTG-CLNT-03","WSTG-CLNT-04","WSTG-CLNT-05","WSTG-CLNT-06","WSTG-CLNT-07","WSTG-CLNT-08","WSTG-CLNT-09","WSTG-CLNT-10","WSTG-CLNT-11","WSTG-CLNT-12","WSTG-CLNT-13","WSTG-APIT-01"]