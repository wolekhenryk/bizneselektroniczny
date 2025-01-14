IMG_NAME = "henrykwolek/my-prestashop:latest
COMPOSE = "https://raw.githubusercontent.com/wolekhenryk/bizneselektroniczny/refs/heads/main/docker-compose.yml"
DOCKER_STACK_NAME = "PS_193165"

echo "Pobieranie image..."
docker pull $IMG_NAME

wget $COMPOSE -O docker-compose.yml

echo "Uruchamianie stacka..."
docker stack deploy -c docker-compose.yml $DOCKER_STACK_NAME --with-registry-auth