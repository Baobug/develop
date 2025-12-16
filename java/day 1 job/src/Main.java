import java.util.Scanner;
public class Main {
    public static void main(String[] args) {
    int x;
    int y;
        Scanner in = new Scanner(System.in);
        x=in.nextInt();
        //  °F = (9/5)*°C + 32
        y= (int) ((x-32)/1.8);
        System.out.print(y);
    }
}