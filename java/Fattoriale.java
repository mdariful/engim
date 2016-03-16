//Calcolare il fattoriale di un numero es14
import java.util.Scanner;
public class Fattoriale{
	public static void main (String args[]){
		Scanner sc=new Scanner(System.in);
		System.out.print("Di quale numero si vuole calcolare il fattoriale? ");
		int n = sc.nextInt();
		int fatt;
		if (n < 0)
			System.out.println("Impossibile calcolare il fattoriale di un numero negativo");
		else if (n==0)
			System.out.println("il numero "+n+" ha fattoriale 1");
		else{
			int tmp = n ;
			fatt=1;
			while(tmp>1){
				fatt=fatt*tmp;
				tmp--;
			}
			System.out.println("il numero "+n+" ha fattoriale "+fatt);
		}
	}
}
