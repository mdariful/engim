import java.util.Scanner;
//esercizio8
public class richiedi{
	public static void main(String[] args){	
		Scanner tastiera=new Scanner(System.in);
		System.out.println("Inserire primo numero");
		int a=tastiera.nextInt();
		int b = 0;
		do{
					
			System.out.println("Inserire secondo numero");
			b=tastiera.nextInt();
						
			}while(a>=b);

		
		for(int i=a;i<=b;i++){
					System.out.println(i);
					}
		
	}

}
