
limit=int(input("enter the no of terms:"))
n1,n2=0,1
c=0
if limit<=0:
	print("please enter a positive number:")
elif limit==1:
	print("fibanocci :")
	print(n1)
else:
	print("fibanocci ")
	while c<limit:
	print(n1)
	nth=n1+n2
	n1=n2
	c+=1

