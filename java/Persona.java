public class Persona{
	private String nomeP, cognomeP, codFiscP;
	
	public Persona(String nome, String cognome, String codFisc)
	{
		
		this.nomeP=nome;
		this.cognomeP=cognome;
		this.codFiscP=codFisc;
	}
	public String getnomeProprietario(){
		return nomeP;
	}
	public String getcognomeProprietario(){
		return cognomeP;
	}
	public String getcodiceFiscale(){
		return codFiscP;
	}
	public void setnomeProprietario(String nuovoNome){
		this.nomeP=nuovoNome;
	}
	public void setcognomeProprietario(String nuovoCognome){
		this.cognomeP=nuovoCognome;
	}
	public void setcodiceFiscale(String nuovoCodiceFiscale){
		this.codFiscP=nuovoCodiceFiscale;
	}
}
