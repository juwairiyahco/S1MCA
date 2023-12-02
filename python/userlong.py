l=int(input("enter the no of elements:"))
a=[]
for i in range(l):
	n=input("enter the elements:")
	a.append(n)
print(a)
w=" "
for j in a:
	if len(j)>len(w):
		w=j
print("longest word is :",w)
