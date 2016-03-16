import java.util.Scanner;

public class MioUfficio{
	public static void main (String [] args){
		
		
		int dim, i;
		String nome;
		float stipendio;
		String risposta = "si";
		
		
		Scanner tastiera = new Scanner(System.in);
		System.out.println("°°°°°Inserire numero impiegati: °°°°");
		dim = tastiera.nextInt();
		tastiera.nextLine();
		
		Impiegati[] impiegato = new Impiegati[dim];
		
		for(i=0; i<dim; i++){
			System.out.println("°°°°°°Inserire impiegato n:"+(i+1)+"°°°");
			System.out.println("Nome e Cognome: ");
			nome = tastiera.nextLine();
			System.out.println("Stipendio :");
			stipendio = tastiera.nextFloat();
			tastiera.nextLine();
			impiegato[i] = new Impiegati(nome,stipendio);
			}
		Ufficio mioUfficio = new Ufficio(impiegato);
		mioUfficio.stampaUfficio();
		System.out.println("°°°°Inserire un nome da cercare: °°°°");
		nome = tastiera.nextLine();
		i = mioUfficio.cercaImpiegato(nome);
		System.out.println("°°°°°°Inserire aumento di stipendio: °°°°");
		stipendio = tastiera.nextFloat();
		mioUfficio.incrementaStipendio(i, stipendio);
		mioUfficio.stampaUfficio();
		
		}
		
	
}
		
