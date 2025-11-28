import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        int foot;
        int inch;
        Scanner in = new Scanner(System.in);
        System.out.print("输入英尺：");
        foot = in.nextInt();
        System.out.print("输入英寸：");
        inch = in.nextInt();
        System.out.println("foot="+foot+",inch="+inch);
        System.out.println("身高为:"+(foot+inch/12.0)*0.3048+"米");

//        double tota=foot+inch/12.0;
//        double heigh=tota*0.3048;
//        System.out.println("身高为:"+heigh+"米");

    }
}