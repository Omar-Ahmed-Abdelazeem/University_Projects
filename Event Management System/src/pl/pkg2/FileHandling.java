
package pl.pkg2;

import java.io.BufferedReader;
import java.io.File;
import java.io.FileReader;
import java.io.FileWriter;
import java.io.IOException;

public class FileHandling {

  // create a new file
  public static int createFile(String fileName) throws IOException {
    File file = new File(fileName + ".txt");
    if (file.createNewFile()) {
      return 1;
    } else {
      return -1;
    }
  }

  // reads file
  public static String readFile(String fileName) throws IOException {
    File file = new File(fileName + ".txt");
    if (file.exists()) {
      StringBuilder text = new StringBuilder();
      try (BufferedReader reader = new BufferedReader(new FileReader(file))) {
        String line;
        while ((line = reader.readLine()) != null) {
          text.append(line).append("\n");
        }
      }
      return text.toString().trim();
    } else {
      return "";
    }
  }

  // adds to the file
  public static int appendFile(String fileName, String text) throws IOException {
    File file = new File(fileName + ".txt");
    try (FileWriter writer = new FileWriter(file, true)) {
      writer.append(text);
      writer.close();
    }
    return 1;
  }

  // deletes whats on the file and writes the given string
  public static int writeFile(String fileName, String text) throws IOException {
    File file = new File(fileName + ".txt");
    try (FileWriter writer = new FileWriter(file, false)) {
      writer.write(text);
      writer.close();
    }
    return 1;
  }

}