import java.util.Scanner;
//esercizio5
public class maggiore{
		public static void main(String[] args){
		
		Scanner tastiera=new Scanner(System.in);
		System.out.print("Inserire primo numero");
		int a=tastiera.nextInt();
		Scanner tastiera2=new Scanner(System.in);
		System.out.print("Inserire secondo numero");
		int b=tastiera2.nextInt();
		Scanner tastiera3=new Scanner(System.in);
		System.out.print("Inserire terzo numero");
		int c=tastiera3.nextInt();
		if (a>b){
		if (a>c) 
		System.out.println("il maggiore e "+a);
		else 
		System.out.println("il maggiore e "+c);
		} else{
			if (b>c)
			System.out.println("il maggiore e "+b);
			else
			System.out.println("il maggiore e "+c);
			}
		}
}
