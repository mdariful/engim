import java.util.Scanner;
//esercizio9
public class pari09{
	public static void main(String[] args){	
		Scanner tastiera=new Scanner(System.in);
		System.out.println("Inserire primo numero");
		int a=tastiera.nextInt();
		int b = 0;
		do{
					
			System.out.println("Inserire secondo numero");
			b=tastiera.nextInt();
						
			}while(a>b);

		
					for(int i=0; i < args.length; i++){
				   
				  System.out.println(args[i]);					
					}
		
	}

}
