public class Cani{
	private String nomeC, sessoC;
	private int idC, etaC;
	static int contatore = 0;

	public Cani(String nome, String sesso, int id, int eta)
	{
		this.nomeC = nome;
		this.sessoC = sesso;
		this.etaC = eta;
		this.idC=++contatore;
		
	}
	public static int getContatore()
	{
		return contatore;
	}
	public String getnomeCane(){
		return nomeC;
	}
	public String getsessoCane(){
		return sessoC;
	}
	public int getetaCane(){
		return etaC;
	}
	
	public void setnomeCane(String nuovoNome){
		this.nomeC=nuovoNome;
	}
	public void setsessoCane(String nuovoSesso){
		this.sessoC=nuovoSesso;
	}
	public void setetaCane(int nuovaEta){
		this.etaC=nuovaEta;
	}
	
	
}
