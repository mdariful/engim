public class Bici
{
	private String nomeProprietario;
	private String modello;
	private int marcia;
	private double velocita;
	private int numeroTelaio;
	static int contatore = 0;
	static final int VELOCITA_MAX = 70;
	
	public Bici(String nomeProprietarioP, String modelloP, double velocitaP, int marciaP)
	{
		this.nomeProprietario = nomeProprietarioP;
		this.modello = modelloP;
		this.velocita = velocitaP;
		this.marcia = marciaP;
		this.numeroTelaio=++contatore;
	
	}
	public Bici(String modelloP, double velocitaP)
	{
		this("Francesco", modelloP, velocitaP, 3);
		this.modello = modelloP;
		this.velocita = velocitaP;
		
	
	}
	public static int getContatore()
	{
		return contatore;
	}
	
	public String getNomeProprietario(){
		return nomeProprietario;
	}
	public String getModello(){
		return modello;
	}
	public double getVelocita(){
		return velocita;
	}
	public int getMarcia(){
		return marcia;
	}
	public void cambiaMarcia(int nuovaMarc){
		marcia = nuovaMarc;
	}
	public void aumentaVelocita(double incremento){
		velocita=velocita+incremento;
		if(velocita>VELOCITA_MAX)
			velocita=VELOCITA_MAX;
	}
	public void stampaStato(){
		System.out.println
		("Proprietario: "+nomeProprietario+"\nmodello: "+modello+"\nvelocità: "+velocita+"\nmarcia: "+marcia+"\ntelaio: "+numeroTelaio);
	}
}
