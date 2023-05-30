There are two exercises. 


Within folder Cancdy Crush is next requirements implemented:
There's a candy trapped at some position(index) in an array. The array is unstable.  
Each element of the array will collapse on itself at some given time. If the candy is at a position which is being crushed, well, let's just say, there will be nomore candy.
The candy has the list times[], where times[i] represents the time when the i-th elementof the array will get crushed.The candy can do one of the following moves:- move to positions i-1 (if i-1 >= 0) OR- move to position  i+1 (if i+1 < n where n is the number of elements in the array)OR- don't move (remain in position i)Each move takes exactly 1 second.Also, after an element of the array is crushed, it becomes unusable. 
This means that thecandy can't pass through it anymore.The candy starts its journey at time zero at some position. 
This position is known.Return the maximum time (in seconds) before the candy gets crushed.Input parameters:times - array of integers, the list of field crush times.position - integer, the initial position of Candy in the array.Constraints:times will have between 1 and 100 elementseach element of times will be an integer between 1 and 1000position will be between 0 and n-1 inclusive, where n is the number of elements in timesReturn value:int - the maximum number of seconds you can keep Candy alive before she is crushed.Class Name:CandyCrushMethod signature:public int howLong(int[] times, int position)

Test cases below are used to check the validity of your programm. 
If the program codeis correct all the test cases will be returned as in the below example.
Test Case 1:howLong({1,2,3,4}, 0) = 4
Test Case 2:howLong({1,2,10,4}, 0) = 10
Test Case 3:howLong({10,1,3,4,7}, 2) = 7
Test Case 4:howLong({10,2,3,4,7}, 2) = 10 etc ... 





Within folder Subsequences is next requirements implemented:

The SubsequencesLet's define a function split(n) where n is an integer. This function returns an array of thedigits of n.For example split(5125) returns [5,1,2,5].
You are given three integer numbers: A, B and C. Your task is the following:Find all numbers X between A and B inclusive such that split(C) is a subsequence ofsplit(X).
Return how many X's you've found.Example:A = 100, B = 650, C = 65The result is 11 and the numbers found are:165, 265, 365, 465, 565, 605, 615, 625, 635, 645, 650Input parameters:A - integer, the starting pointB - integer, the end pointC - integer, the number whose digits will be searched forConstraints:A,B and C will each be between 1 and 1000000 (million)A will always be less than or equal to BReturn value:int - the count of numbers between A and B inclusive that fulfill the problemrequirements.Class Name:TheSubsequencesMethod signature:public int count(int A, int B, int C)


Test cases below are used to check the validity of your programm. If the program codeis correct all the test cases will be returned as in the below example.
Test Case 1:count(26, 69, 3) = 13
Test Case 2:count(11, 100, 4) = 18
Test Case 3:count(77, 78, 4) = 0
Test Case 4:count(13834, 26066, 1380) = 14 etc ....
