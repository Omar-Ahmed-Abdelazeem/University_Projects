
package pl.pkg2;

import java.io.IOException;

public class customerClass extends Human {

    public customerClass(String name, String email, String password, String phone, String role) {
        super(name, email, password, phone, role);
    }

    // Booking method
    public void book(Booking b, int id) {
        String fileName = id + "_booking";  // Ensure the file name includes the extension
        try {
            FileHandling.createFile(fileName);  // Create the file if it doesn't exist
            String bookingDetails = b.toString() + "\n" + b.bookingState;
            FileHandling.appendFile(fileName, bookingDetails);  // Append booking details
        } catch (IOException e) {
            System.out.println("Error while booking: " + e.getMessage());
        }
    }

    // Check the state of the bill
public void checkState(int id) {
    try {
        // Create a new Bill object and populate it using objectify
        Bill bill = new Bill(0, 0, 0);  // Create an empty Bill object
        bill.objectify(id, bill);  // Populate the bill using the objectify method

        // Now you can check the priceState
        if (bill.priceState == 1) {
            System.out.println(bill.toString());  // Print bill if priceState is 1
        } else {
            System.out.println("The bill is not yet approved.");
        }
    } catch (IOException e) {
        System.out.println("Error while checking bill state: " + e.getMessage());
    }
}

    // Contact PM method
    public String contactPM(String message, int id) {
        String fileName = "chat_" + id;  // Ensure the file name includes the extension
        try {
            if (!new java.io.File(fileName).exists()) {  // Check if file exists
                FileHandling.createFile(fileName);  // Create the file if it doesn't exist
            }
            String formattedMessage = "Customer(" + this.name + "): " + message + "\n";  // Access name directly
            FileHandling.appendFile(fileName, formattedMessage);  // Append message to the file
            return FileHandling.readFile(fileName);  // Return the updated chat history
        } catch (IOException e) {
            System.out.println("Error while contacting PM: " + e.getMessage());
            return "";
        }
    }

    // Customer login method
    public static int loginC(String email, String password, String fileName) {
        try {
            String[] lines = FileHandling.readFile(fileName).split("\n");  // Read file content
            for (String line : lines) {
                String[] details = line.split("-");  // Split each line into details
                if (details[2].equals(email) && details[3].equals(password)) {  // Compare email and password
                    return Integer.parseInt(details[0]);  // Return the customer ID
                }
            }
        } catch (IOException e) {
            System.out.println("Error while logging in: " + e.getMessage());
        }
        return -1;  // Return -1 if login failed
    }

    // Manage booking (update booking information)
    public int manageBooking(Booking e, String old, String newValue, int id) {
        String fileName = id + "_booking";  // Ensure the file name includes the extension
        try {
            String fileContent = FileHandling.readFile(fileName);  // Read current file content
            String updatedContent = fileContent.replace(old, newValue);  // Replace old value with new value
            FileHandling.writeFile(fileName, updatedContent);  // Write updated content back to the file
            return 1;  // Return success
        } catch (IOException e1) {
            System.out.println("Error while managing booking: " + e1.getMessage());
            return 0;  // Return failure
        }
    }
}