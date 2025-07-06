/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package pl.pkg2;


import java.io.IOException;

import static pl.pkg2.FileHandling.readFile;

public class Bill {
	protected int    priceOfHour;
	protected int    priceOfMeal;
	protected int    priceOfPerson;
	protected int    NOH;
	protected int    NOM;
	protected int    NOP;
	protected double reservation =  (int)(Math.random() * 900000) + 100000;;
	protected double total;
	protected int 	 priceState = -1;


	public Bill(int NOH, int NOM, int NOP) {
		if (NOH < 0 || NOM < 0 || NOP < 0) {
			throw new IllegalArgumentException("Values must be non-negative");
		}
		this.NOM = NOM;
		this.NOP = NOP;
		this.NOH = NOH;
		this.reservation = (int)(Math.random() * 900000) + 100000;
		this.priceState = -1;
	}
        
        public Bill(){
            
        }


	public void calcPrice(int priceOfHour, int priceOfMeal, int priceOfPerson){
		if (priceOfHour < 0 || priceOfMeal < 0 || priceOfPerson < 0) {
			throw new IllegalArgumentException("Prices must be non-negative");
		}
		this.priceOfHour   = priceOfHour;
		this.priceOfMeal   = priceOfMeal;
		this.priceOfPerson = priceOfPerson;
		total = (NOH * priceOfHour) + (NOM * priceOfMeal) + (NOP * priceOfPerson);
	}


	public void objectify(int id, Bill b) throws IOException {
		String fileContent = readFile("price_"+id);
		String[] priceInfo = fileContent.split("\n");
	
		if (priceInfo.length == 6) {
			b.priceOfHour = Integer.parseInt(priceInfo[0].trim());
			b.priceOfMeal = Integer.parseInt(priceInfo[1].trim());
			b.priceOfPerson = Integer.parseInt(priceInfo[2].trim());
                        b.reservation = Double.parseDouble(priceInfo[3].trim());
                        b.total = Double.parseDouble(priceInfo[4].trim());
                        b.priceState = Integer.parseInt(priceInfo[5].trim());
		} else {
			throw new IOException("Invalid pricing data format in file.");
		}
	}


	@Override
	public String toString() {
		return "\nBill: \n" + "price Of Hour =" + priceOfHour + "\nprice Of Meal =" + priceOfMeal+ "\nprice Of Person =" + priceOfPerson + "\n"+
				"Total Price = " + NOH + "*" + priceOfHour + "+" + NOM + "*" + priceOfMeal + "+" + NOP + "*" + priceOfPerson +
				"=" + (total) + "reservation number =" + reservation;
	}

}