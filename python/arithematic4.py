a=int(input("enter a number:"))
b=int(input("enter a number:"))
print("1-addition \n 2-subtraction \n 3-multiplication \n 4-division")
ch=int(input("enter a choice"))
if ch==1:
	c=a+b
	print("sum of numbers",c)
elif ch==2:
	c=a-b
	print("subtracted value",c)
elif ch==3:
	c=a*b
	print("multiplied value is",c)
elif ch==4:
	c=a/b
	printf("divided value is",c)
else:
   print("you selected a wrong choice")

