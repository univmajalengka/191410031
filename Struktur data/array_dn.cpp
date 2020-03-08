#include <iostream>
#include <conio.h>
using namespace std;

int main() {
	int data[5] = {20,89,87,12,21};
	cout<<"Input :"<<endl;
	for(int i=0; i<5; i++) {
		cout<<"index ke-";cin>>i;
	}
	cout<<endl;
	cout<<"Output :"<<endl;
	for(int i=0; i<5; i++) {
		cout<<"Index ke-"<<"["<<i<<"]"<<":"<<data[i]<<endl;
	}
	getch();
	return 0;
}
