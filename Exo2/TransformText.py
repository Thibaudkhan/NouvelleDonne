import sys

def checkDuplicateAndPrint(array): 
	if len(array) == 2:#check how many arguments 
		print(array[1].upper())
		print(array[1].lower())

	elif len(array) > 3:
		if len(array) != len(set(array)):#no duplicate are insert to the set so compare if the size between the two array are the same and if not they was at least 1 duplicate  
			print(1)
		else:
			print(0)


checkDuplicateAndPrint(sys.argv)
