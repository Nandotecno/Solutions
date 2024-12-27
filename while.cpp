	# include <stdio.h>
	#include <locale.h>
	
	int numero=1;
	
	main(void){
		
		setlocale(LC_ALL,"Portuguese");
		
	while(numero<10){
		printf("Numero: %i \n", numero);
		
		numero++;
	}
			
		}
