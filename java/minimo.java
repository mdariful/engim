// Ricerca del massimo es13
import java.util.Scanner;
public class minimo {
	public static void main(String [] args){
		Scanner sc=new Scanner(System.in);
		System.out.println("Quanti numeri devo leggere?");
		System.out.print("n=");
		int n=sc.nextInt();
		System.out.println();

		boolean firstTime = true;
		int letti = 0, max = 0;
		while (letti<n){
			System.out.print("Inserire numero "+(letti+1)+": ");
			int numero=sc.nextInt();
			if (firstTime){
				min = numero;
				firstTime = false;
			}
			if (numero < min)
				min = numero;
			letti--;
		}
		System.out.println("Il min della sequenza e' ="+min);
	}

}
