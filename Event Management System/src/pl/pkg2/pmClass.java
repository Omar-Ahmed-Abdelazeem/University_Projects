
package pl.pkg2;

import java.io.BufferedReader;
import java.io.BufferedWriter;
import java.io.File;
import java.io.FileNotFoundException;
import java.io.FileReader;
import java.io.FileWriter;
import java.io.IOException;
import java.util.Scanner;

public class pmClass extends Human {

    // Constructor
    public pmClass(String name, String email, String password, String phone, String role) {
        super(name, email, password, phone, role);
    }
    
    public pmClass(){
    }

    // Finds the file using the id, updates the priceState to 1
    public void sendPriceToCustomer(int id) {
        Bill bill = new Bill(0, 0, 0); // Create an empty Bill object
        try {
            bill.objectify(id, bill); // Modify the object using objectify
            bill.priceState = 1;
            System.out.println("Price sent to customer.");
        } catch (IOException e) {
            System.out.println("Error loading bill: " + e.getMessage());
        }
    }

    // Finds the file using the id, prints the bill using toString
    public void viewPrice(int id) {
        Bill bill = new Bill(0, 0, 0); // Create an empty Bill object
        try {
            bill.objectify(id, bill); // Modify the object using objectify
            System.out.println(bill.toString());
        } catch (IOException e) {
            System.out.println("Error loading bill: " + e.getMessage());
        }
    }

    // Finds the booking using id, prints info if bookingState is 0 or 1
    public String viewBookingFromAdmin(int id) {
        Booking booking = new Booking(); // Create an empty Booking object
        try {
            booking.objectify(id, booking); // Populate the object with data
            if (booking.bookingState == 0 || booking.bookingState == 1) {
                return booking.toString();
            } else {
                System.out.println("Booking not found or invalid state.");
                return "-1";
            }
        } catch (IOException e) {
            System.out.println("Error reading booking: " + e.getMessage());
                return "0";

        }
    }

    // Finds the booking using id, updates requestState to 1
    public void sentBookingToSP(int id) {
        Booking booking = new Booking(); // Create an empty Booking object
        try {
            booking.objectify(id, booking); // Populate the object with data
            booking.bookingState = 1; // Set requestState to 1
            System.out.println("Booking sent to Service Provider.");
        } catch (IOException e) {
            System.out.println("Error reading booking: " + e.getMessage());
        }
    }

    // Appends a message to the chat file and returns the full chat history
    public String contactCustomer(String message, int id) {
        String fileName = "chat_" + id + ".txt";
        StringBuilder chatHistory = new StringBuilder();
        try (BufferedWriter writer = new BufferedWriter(new FileWriter(fileName, true))) {
            writer.write("PM(" + name + "): " + message);
            writer.newLine();
        } catch (IOException e) {
            System.out.println("Error writing to chat file.");
        }
        try (BufferedReader reader = new BufferedReader(new FileReader(fileName))) {
            String line;
            while ((line = reader.readLine()) != null) {
                chatHistory.append(line).append("\n");
            }
        } catch (IOException e) {
            System.out.println("Error reading chat file.");
        }
        return chatHistory.toString();
    }

    // Verifies login credentials by checking a file
    public static int login(String email, String password, String fileName) {
        try (Scanner scanner = new Scanner(new File(fileName))) {
            while (scanner.hasNextLine()) {
                String[] credentials = scanner.nextLine().split(",");
                if (credentials.length >= 2 && credentials[0].equals(email) && credentials[1].equals(password)) {
                    return 1; // Login successful
                }
            }
        } catch (FileNotFoundException e) {
            System.out.println("File not found.");
        }
        return 0; // Login failed
    }
}