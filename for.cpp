	#include <stdio.h>
	#include <locale.h>
	
	int numero, i;
	
	main(void){
		
		setlocale(LC_ALL,"Portuguese");
		
		printf("Digite um n�mero: ");
		scanf("%d", &numero);
		
		printf("CRESCENTE\n");
		for(i= 0; i <= numero; i++){
			printf("- %d\n", i);
		}
		
		printf("\n\nDECRESCENTE\n");
		for(i = numero; i >0; i--){
			printf("- %d\n, i");
		}
		
		return 0;
		
		}
		
		
		
		
		
		
		
		
		
		
		
		
		
