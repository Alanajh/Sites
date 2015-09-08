import javax.swing.JPanel;
import java.awt.*;

public class GamePane extends JPanel implements Runnable{
	
	/////FIELDS
	public static int WIDTH = 400;
	public static int HEIGHT = 400;
	
	private Thread thread;
	private boolean running;
	
	private BufferedImage image;
	private Graphics2D g;
	
	///// CONSTRUCTOR
	public GamePanel(){
		super();
		setPreferredSize(new Dimension(WIDTH, HEIGHT));
		setFocusable(true);
		requestFocus();
	}
	
	///// FUNCTIONS
	public void addNotify(){
		super.addNotify();
		if(thread == null){
			thread = new Thread(this);
			thread.start();
		}
	}
	
	public void run(){
		
		running = true;
		
		image = new BufferedImage(WIDTH, HEIGHT, BufferedImage.TYPE_INT_RGB);
		
		/////GAME LOOP
		while(running){
			gameUpdate();
			gameRender();
			gameDraw();
		}
	}
	
	///// updates game logic
	private void gameUpdate(){
		
	}
	
	///// drawing to buffer
	private void game render(){
		g. setColor(Color.GREEN);
		g.fillRect(0, 0, WIDTH, HEIGHT);
		g.setColor(Color.WHITE);
		g.drawString("Testing", 100, 100);
	}
	
	///// drawing to screen
	private void gameDraw(){
		Graphics g2 = this.getGraphics();
		g2.drawImage(image, 0, 0, null);
		g2.dispose();
	}
}