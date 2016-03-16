import java.util.Scanner;
//esercizio6
public class pitagora{
		public static void main(String[] args){
		int conto=0;
		Scanner tastiera=new Scanner(System.in);
		System.out.print("Inserire primo numero");
		int a=tastiera.nextInt();
		Scanner tastiera2=new Scanner(System.in);
		System.out.print("Inserire secondo numero");
		int b=tastiera2.nextInt();
		Scanner tastiera3=new Scanner(System.in);
		System.out.print("Inserire terzo numero");
		int c=tastiera3.nextInt();
					if (a*a+b*b==c*c){
						System.out.println("e una terna pitagorica");
						
						}else{
						System.out.println("Non e una terna pitagorica");
						}
			}
		}
