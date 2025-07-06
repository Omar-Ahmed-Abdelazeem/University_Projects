
package pl.pkg2;

import java.io.File;
import java.io.IOException;
import static pl.pkg2.FileHandling.appendFile;
import static pl.pkg2.FileHandling.readFile;
import static pl.pkg2.FileHandling.writeFile;

public class spClass extends Human {

    // Constructor
    public spClass(String name, String email, String password, String phone, String role) {
        super(name, email, password, phone, role);
    }

    // View booking details from PM
    public String viewBookingFromPM(int id) {
        try {
            String fileName = id + "_booking";
            readFile(fileName);

            Booking booking = new Booking();
            booking.objectify(id, booking);  // Assuming objectify properly populates booking

            // Direct access to the bookingstate protected variable
            if (booking.bookingState == 1) {  // Direct access to protected variable
               return booking.toString();
            } else {
                System.out.println("No approved booking found for Customer ID: " + id);
                return "-1";
            }
        } catch (IOException e) {
            System.out.println("An error occurred while viewing booking: " + e.getMessage());
            return "-1";

        }
    }

    // Evaluate price for a booking
    public void evaluatePrice(Booking booking, int id, int m, int p, int h) {
        try {
            String priceFileName = "Price_" + id;
            File file = new File(priceFileName);
            if (file.exists()) {  // Checking if price file already exists
                System.out.println("Price file already exists for Customer ID: " + id);
                return;
            }

            // Direct access to protected variables in booking
            int numberOfHours = booking.numberOfHours;  // Directly using protected variables
            int numberOfMeals = booking.numberOfMeals;
            int numberOfPeople = booking.numberOfPeople;

            // Initialize Bill object and calculate price
            Bill bill = new Bill(numberOfHours, numberOfMeals, numberOfPeople);
            bill.calcPrice(h, m, p); // Example prices: Customize as needed

            // Write details to price file
            StringBuilder billData = new StringBuilder();
            billData.append(bill.priceOfHour).append("\n")  // Directly using protected variables in bill
                    .append(bill.priceOfMeal).append("\n")
                    .append(bill.priceOfPerson).append("\n")
                    .append(bill.reservation).append("\n")
                    .append(bill.total).append("\n")
                    .append("0"); // Set priceState to 0

            FileHandling.writeFile(priceFileName, billData.toString());

            System.out.println("Price evaluation completed and saved for Customer ID: " + id);
        } catch (IOException e) {
            System.out.println("An error occurred while evaluating price: " + e.getMessage());
        }
    }

    // Login for SP
    public static int login(String email, String password, String fileName) {
        try {
            File file = new File(fileName);
            if (!file.exists()) {  // Checking if the file exists directly
                System.out.println("File not found: " + fileName);
                return 0;
            }

            String fileContent = FileHandling.readFile(fileName);
            String[] users = fileContent.split("\n");

            for (String user : users) {
                String[] userDetails = user.split("-");

                // Directly comparing protected variables (email and password)
                if (userDetails[2].equals(email) && userDetails[3].equals(password) && userDetails[5].equals("SP")) {
                    System.out.println("Login successful for Service Provider.");
                    return 1;
                }
            }

            System.out.println("Invalid email or password.");
            return 0;
        } catch (IOException e) {
            System.out.println("An error occurred during login: " + e.getMessage());
            return 0;
        }
    }
}
