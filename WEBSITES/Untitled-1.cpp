#include<iostream>
int main()
{
	//Array:A collaction of variables stored in contiguous memory locations
	//homegeneous data structure
	//elements are accessed using inded:0,1,2,3,...
	int a=7;
    char letters[]={'a','b','c','d'};
	int other[7];
	int*p=&a;
	    std::cout<<p<<'\t'<<*p<<"\n";
	a=a+6;	
		std::cout<<p<<'\t'<<*p<<"\n";
	(*p)+=5;
	    	std::cout<<p<<'\t'<<*p<<"\n";
		int number[]={1,2,3,4,5,6,};
		for(int i=0;i<7;++i)
		std::cout<<number[i]<<'\t';
		std::cout<<"\n";
		for(int i=0;i<7;++i)
		std::cout<<*(number+i)<<'\t';
		std::cout<<"\n";
	return 0;
}