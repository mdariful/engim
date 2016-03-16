import java.util.Scanner;
import java.lang.reflect.Constructor;

public class Bicicletta
{
	String modello, nomeProprietario;
	int marcia, velocita;
	String Persona proprietario;

	public Bicicletta(String modelloP, Persona proprietario, int velInz, int marciaInz)
	{
		this.proprietario = proprietario;
		modello = modelloP;
		marcia = marciaInz;
		velocita = velInz;

	}

	public Bicicletta(String modelloP, int marciaInz)
	{
		modello = modelloP;
		marcia = marciaInz;

	}

	public String getModello()
	{

		return modello;

	}

	public String getNomeProprietario()
	{
		if(nomeProprietario != null){
			return nomeProprietario;
		}else{
			return "Nessun Prorpietario";
		}

	}
	
	public static String GetRandomString(int maxlength)
	{
    String result = "";
    int i = 0, n = 0, min = 33, max = 122;
    while(i < maxlength)
    {
        n = (int)(Math.random() * (max - min) + min);
        if(n >= 33 && n < 123)
        {
            result += (char)n;
            ++i;
        }
    }
    return(result);
	}

	public int getMarcia()
	{
		return marcia;

	}

	public void cambiaMarcia(int nMarcia)
	{
		marcia = nMarcia;

	}

	public int getVelocita()
	{
		return velocita;

	}

	public void aumentaVelocita(int incr)
	{
		velocita += incr;


	}

	public void stampaStato()
	{
		String proprietario;

		if(this.proprietario != null){
			this.proprietario.stampaPersona();
		}else{
			proprietario = "Nessun Prorpietario";
		}
		System.out.println("Modello: "+modello);
		System.out.println("Marcia: "+marcia);
		System.out.println("Velocita: "+velocita);
		System.out.println("Numero Telaio: "+result);


	}

	/*public static void main (String [] args)
	{
		 String nomeBici, modello, proprietario;
		 int i;
		 Bicicletta[] a = new Bicicletta[3];
		 Scanner tastiera=new Scanner(System.in);
		 System.out.println("Ciao Ciao");
		 Bicicletta laMiaBici = new Bicicletta("BMX","Raffone",10,3);
		 Bicicletta biciBrutta = new Bicicletta("MountainBike",1);
		 laMiaBici.stampaStato();
		 biciBrutta.stampaStato();
		 biciBrutta.getNomeProprietario();
		 laMiaBici.aumentaVelocita(20);
		 laMiaBici.stampaStato();
		 
		 
		 for(i=0; i<3; i++){
		 		a[i] = new Bicicletta("MountainBike",1);
		 }
		 for(i=0; i<3; i++){
		 		a[i].stampaStato();
		 }
	}
	*/


}
