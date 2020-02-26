#include <iostream>
#include <conio.h>
using namespace std;

int pj(int hours, int minute, int second) {
	int rd;
	rd=(hours*3600)+(minute*60)+second;
	return rd;
}

int main() {
	int hr1, mt1, sc1;
	int hr2, mt2, sc2;
	int qry1, qry2, result;

	cout<<"Masukan jam pertama"<<endl;
	cout<<"Masukan jam : ";cin>>hr1;
	cout<<"Masukan menit : ";cin>>mt1;
	cout<<"Masukan detik : ";cin>>sc1;
	cout<<endl;

	cout<<"Masukan jam kedua"<<endl;
	cout<<"Masukan jam : ";cin>>hr2;
	cout<<"Masukan menit : ";cin>>mt2;
	cout<<"Masukan detik : ";cin>>sc2;
	cout<<endl<<endl;

	qry1=pj(hr1,mt1,sc1);
	cout<<"Jumlah detik waktu pertama : "<<qry1<<endl;

	qry2=pj(hr2,mt2,sc2);
	cout<<"Jumlah detik waktu kedua : "<<qry2<<endl;

	result=qry1+qry2;
	cout<<"Total detik : "<<result;
	getch();
	return 0;
}
