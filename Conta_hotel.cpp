#include<iostream>
#include<locale.h>
#include<string>
using namespace std;
main(){
	char nomeasb[30];
	int diariasasb;
	int mesasb;
	float valordasb;
	float valortotalasb;
	string respasb;
	
	setlocale(LC_ALL,"Portuguese");
	
	do{
		system("cls");
		cout<<"\n-------------------------------------------------------";
		cout<<"\n                      HOTEL LITORAL                    ";
		cout<<"\n-------------------------------------------------------";
		cout<<"\n\n Digite o primeiro Nome do Hospede: ";
		cin>>nomeasb;
		cout<<"\n\n Digite o número de diárias: ";
		cin>>diariasasb;
		cout<<"\n-------------------------------------------------------";
		cout<<"\n Digite 1 para Hospedagem Prata";
		cout<<"\n Digite 2 para Hospedagem Bronze";
		cout<<"\n Digite 3 para Hospedagem Ouro";
		cout<<"\n-------------------------------------------------------";
		cout<<"\n\n Digite o tipo de Hospedagem: ";
		cin>>mesasb;
		cout<<"\n-------------------------------------------------------";
		
		switch (mesasb){
			case 1 : valordasb=399;
						break;
						
			case 2 : valordasb=299;
						break;
						
			case 3 : valordasb=275;
						break;
									
			default : cout<<"\n Hospedagem não existente";
						valordasb=0;
							break;
					 			
		};
		
		valortotalasb = diariasasb * valordasb;
		
		cout<<"\n\n Valor da diária...........: R$ "<<valordasb;
		cout<<"\n\n Valor Total da Hospedagem.: R$ "<<valortotalasb;
		cout<<"\n-------------------------------------------------------";
		cout<<"\n Digite s para novo cliente : ";
		cin>>respasb;
		cout<<"\n-------------------------------------------------------";	
	}
	while (respasb == "S");
	cout<<"\n\n FIM DO PROGRAMA !!!";
	return 0;
}
