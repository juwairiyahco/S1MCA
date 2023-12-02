len1=int(input("enter the length of the list1:"))
len2=int(input("enter the length of the list2:"))
list1=[]
list2=[]
for i in range(len1):
	a=int(input("enter the number"))
	list1.append(a)
print(list1)
for i in range(len2):
	b=int(input("enter the number"))
	list2.append(b)
	
print(list2)	
if(len(list1)==len(list2)):
 	print("both list have same length")
else:
	print("different length")
 	
if (sum(list1)==sum(list2)):
	print("both have same sum")
else:
	print("different sum")
	
	
inter=set(list1).intersection(list2)
if inter:
	print("intersection:",inter)
else:
	print("no common elements")
