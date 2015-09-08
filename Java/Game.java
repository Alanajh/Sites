import javax.swing.JFrame;

public class Game{
	public static void main(String[] args){
		
		JFrame.window - new JFrame("Game");
		window.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		
		window.setContentPane(GamePanel());
		
		window.pack();
		window.setVisible(true);
	}
}