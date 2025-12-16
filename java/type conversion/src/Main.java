import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        int foot;
        double inch;
        Scanner in = new Scanner(System.in);
        System.out.print("请输入英尺");
        foot = in.nextInt();
        System.out.print("请输入英寸");
        inch = in.nextDouble();
//        System.out.println(10/3);
        System.out.println("foot="+foot+",inch="+inch);
//        System.out.println((foot+inch/12)*0.3048);
        System.out.println((int)((foot+inch/12)*0.3048*100)+"cm");

    }
}