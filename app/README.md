To build:

```bash
docker build -t jasonmel/k8s-demo-app .
```

To run:

```bash
docker run -p 8080:80 -e MESSAGE="Hello from localhost." -e USERNAME=jasonmel -e PASSWORD=passw0rd jasonmel/k8s-demo-app
```

To push:

```bash
docker push jasonmel/k8s-demo-app
```
