import {Provider} from "react-redux";
import {BrowserRouter as Router} from "react-router-dom";
import {store} from "./init/store";
import {history} from "./navigation/history";
import {Switch} from "./navigation";

function App() {
    return (
      <Provider store={store}>
          <Router history={history} >
              <Switch/>
          </Router>
      </Provider>
    )
}

export default App;
