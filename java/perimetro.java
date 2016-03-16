import java.util.Scanner;
//esercizio2
public class perimetro{
		public static void main(String[] args){
		
		int p = 0;
		Scanner tastiera=new Scanner(System.in);
		System.out.print("Inserire la misura della base");
		int b=tastiera.nextInt();
		Scanner tastiera2=new Scanner(System.in);
		System.out.print("Inserire altezza");
		int h=tastiera2.nextInt();
		p=(b+h)*2;
		System.out.println("il perimetro e "+p);
		}
}
