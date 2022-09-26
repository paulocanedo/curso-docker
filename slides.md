---
marp: true
theme: gaia
_class: lead
paginate: true
backgroundColor: #fff
backgroundImage: url('https://marp.app/assets/hero-background.svg')
---

# **Curso Docker**

Entendendo e trabalhando com containers utilizando docker

## Paulo Canedo C Rodrigues

---

# Conteúdo Previsto

- Conceitos
- Instalação
- Construir uma imagem
- Volumes
- Redes
- Docker Compose
- Melhores Práticas
- Exemplo completo
- Ferramentas auxiliares

---

# Um pouco de história
![](./images/container_evolution.svg)

---

# O que é um container?

## Tudo começou com um chroot

Se você é familiar com _chroot_, pense em um container como uma versão estendida do _chroot_. O sistema de arquivos está simplesmente vindo da imagem. Mas um container adiciona isolação extra não disponível quando está usando apenas o _chroot_.

---

# Vamos falar mais sobre isolamento
## kernel namespaces

- Mount (mnt)
- UNIX Time-sharing System (uts)
- Interprocess Communication (ipc)
- Process ID (pid)
- Network (net)
- User id (uid)
- Control Group (cgroup)

--- 

# E o que é o docker?

- Docker Engine
  - API
  - CLI
- Docker Compose
- Docker Swarm
- Docker HUB

---

# Instalação

- Linux
- Windows
- Mac OS

Jetbrains IDEs VSCode

---

# Primeiros passos

  - ```docker run [OPTIONS] IMAGE [COMMAND] [ARG...]```
  - ```docker run hello-world```
  - ```docker ps```

---

# Entendendo os termos mais comuns

- Imagem
- Container
- Host (Máquina hospedeira)

---

# Referências bibliográficas

- https://docs.docker.com/get-started/
- https://medium.com/@saschagrunert/demystifying-containers-part-i-kernel-space-2c53d6979504
- https://kubernetes.io/docs/concepts/overview/