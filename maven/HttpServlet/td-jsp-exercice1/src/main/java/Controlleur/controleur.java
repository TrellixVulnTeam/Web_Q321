package Controlleur;

import javax.servlet.ServletException;
import javax.servlet.ServletRequest;
import javax.servlet.ServletResponse;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import java.io.IOException;

@WebServlet(name="helloWorld", urlPatterns ="/hello")
public class controleur extends HttpServlet {

    @Override
    public void service(ServletRequest req, ServletResponse res) throws ServletException, IOException {
        req.getServletContext()
                .getRequestDispatcher("/WEB-INF/Txt1.jsp")
                .forward(req,res);
    }
}
