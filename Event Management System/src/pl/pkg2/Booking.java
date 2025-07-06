
package pl.pkg2;

import java.io.IOException;

import static pl.pkg2.FileHandling.readFile;

public class Booking {
  protected String name;
  protected String date;
  protected String place;
  protected int numberOfMeals;
  protected int numberOfPeople;
  protected int numberOfHours;
  protected int bookingState;
  
  public Booking(String name, String date, String place, int numberOfMeals, int numberOfPeople, int numberOfHours) {
    this.name = name;
    this.date = date;
    this.place = place;
    this.numberOfMeals = numberOfMeals;
    this.numberOfPeople = numberOfPeople;
    this.numberOfHours = numberOfHours;
    this.bookingState = -1;
  }

  Booking() {
    this.bookingState = -1;
  }

  public void objectify(int id, Booking p) throws IOException {
    
    String fileContent = readFile(id+"_booking");
    String[] bookingDetails = fileContent.split("\n");

    if (bookingDetails.length == 7) {
        p.name = bookingDetails[0].trim();
        p.date = bookingDetails[1].trim();
        p.place = bookingDetails[2].trim();
        
        String[] s = bookingDetails[3].split(":");
        p.numberOfMeals = Integer.parseInt(s[1].trim());
        
        s = bookingDetails[4].split(":");
        p.numberOfPeople = Integer.parseInt(s[1].trim());
        
        s = bookingDetails[3].split(":");
        p.numberOfHours = Integer.parseInt(s[1].trim());
        
        p.bookingState = Integer.parseInt(bookingDetails[6].trim());
        
    } else {
        throw new IOException("Invalid booking data format in file.");
    }
}

  @Override
  public String toString() {
    return "name:" + name + "\ndate:" + date + "\nplace:" + place +
            "\nnumberOfMeals:" + numberOfMeals+ "\nnumberOfPeople:"
            + numberOfPeople + "\nnumberOfHours:" + numberOfHours;
  }
}