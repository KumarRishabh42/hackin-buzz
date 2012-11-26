f=open("newlugguwuggujuggu.txt",'r').readlines()
for i in xrange(0,len(f)):
	f[i]=f[i].strip().split()[-1]
#	f[i]=f[i].split()[-1]

dict={}
for i in xrange(0,len(f)):
	dict[f[i]]=0
for i in xrange(0,len(f)):
	 dict[f[i]]+=1



for i in dict:
  if dict[i]>1000:
    print i, dict[i]
