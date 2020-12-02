#include <iostream>
#include <string.h>
using namespace std;

int main() {

	char var1[70];
	char var2[70];

	cout<<"Program Palindrome"<<endl;
	cout<<"Masukan Kata : ";cin>>var1;

	strcpy(var2,var1);
	strrev(var2);

	if(strcmp(var1, var2) == 0 ) {

		cout<<"Merupakan kata palindrome, "<<var1;
		
	} else {

		cout<<"Bukan merupakan kata palindrome, "<<var1;
	}

	return 0;
}